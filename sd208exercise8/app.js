const express = require('express')
const app = express();
const bodyParser = require('body-parser')
const connection = require('./services/database')
const path = require('path');
const { request, response } = require('express');
const session = require('express-session');

const port = 4000
app.use(bodyParser.json());
app.use(express.urlencoded({ extended: true }))
app.set('view engine', 'ejs')
app.use('/public', express.static(path.join(__dirname, "public")))
connection.connect()


// import model
const User = require('./models/userModel')

//use session here
app.use(session({
    secret: 'thisisasecret',
    resave: false,
    saveUninitialized: true
}))

//middleware to validate the user input
const validateRegisterInfo = (request, response, next) => {
    let data = request.body;
    let error = {};

    for (let key in data) {
        if (data[key] == "") {
            error["message"] = "All fields are required!";
            return response.render("form", { error: error, classname: "right-panel-active" });
        }
    }

    request.session.user = data;
    next();
}

//middleware to signin
const validateLoginInfo = (request, response, next) => {
    const error = {};
    const data = request.body;
    const user = request.session.user;
    //check if some fields are empty
    for (let key in data) {
        if (data[key] == "") {
            error["message"] = "All fields are required!";
            return response.render("form", { error: error });
        }
    }

    //check the credentials
    if (data.email != user.email || data.password != user.password) {
        error["message"] = "Invalid Credentials";
        return response.render("form", { error: error });
    }

    next();
}
//get the signin-signup page
app.get('/', (request, response) => {
    response.render('form', {
        error: ""
    })
})

app.get('/bio', (request, response) => {
    const user = request.session.user;
    response.render('bio', { user: user });
})

app.post('/login', validateLoginInfo, (request, response) => {
    response.redirect('/bio')
})


app.post('/register', validateRegisterInfo, (request, response) => {

    var user = {
        'name': request.body.name,
        'email': request.body.email,
        'password': request.body.password,
    }
    //create user 
    User.create(user, function (err, result) {
        if (err) {
            console.log(err);
        }
        console.log(result)
        response.render('form', { message: "please login!", error: "" });
    });
})


//port
app.listen(port, () => {
    console.log(`Server listening to port ${port}`);
})

