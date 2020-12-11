const mongoose = require('mongoose')
const connectToDatabase = () =>{
    mongoose 
        .connect("mongodb://sarah:admin@firstcluster-shard-00-00.d7apc.mongodb.net:27017,firstcluster-shard-00-01.d7apc.mongodb.net:27017,firstcluster-shard-00-02.d7apc.mongodb.net:27017/validationForm?ssl=true&replicaSet=atlas-10ofyi-shard-0&authSource=admin&retryWrites=true&w=majority",{
            useNewUrlParser:true,
            useUnifiedTopology:true,
            useCreateIndex:true,
            useFindAndModify:false
        })
        .then(()=>{
            console.log("Connected to database")
        })
        .catch((error)=>console.log(error));
}

module.exports = {
    connect:connectToDatabase
};