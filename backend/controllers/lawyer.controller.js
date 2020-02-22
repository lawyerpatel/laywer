const _ = require('lodash');
const {
    Lawyer
} = require('../models/lawyer.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.register = async (req, res) => {
    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }
    let data = {
        name: {
            first_name: req.body.name.first_name,
            last_name: req.body.name.last_name
        },
        email: req.body.email,
        phone_no: req.body.phone_no,
        city: req.body.city,
        gender: req.body.gender,
        user_type: req.body.user_type,
        file: req.body.file,
        password: hash(cypherdata),

    };
    let lawyer = new Lawyer(data);
    lawyer = await lawyer.save();
    return Respond.success('Registration successfully', lawyer.details, res);
};

exports.select = async (req, res) => {

    let cond = {};
    if (!!req.body.city) {
        cond['city'] = {'$regx':req.body.city};
        
    }
    if (!!req.body.name) {
        console.log("name",req.body.name);
        name_parts = req.body.name.split(" ");
        if(name_parts.length == 1){
            cond['name.first_name'] = {'$regx':".*"+name_parts[0]+".*"};
            cond['name.last_name'] = {'$regx':".*"+name_parts[0]+".*"};
        }else{
            cond['name'] = req.body.name;
        }   
        console.log(cond)
    }
    if (!!req.body.first_name) {
        console.log("name",req.body.first_name);
        
        
        cond['name.first_name'] = {$regx:".*"+req.body.first_name+".*"};

    }
    if (!!req.body.last_name) {
        console.log("name",req.body.last_name);  
        cond['name.last_name'] = {$regx:".*"+req.body.last_name+".*"};
    }

    let lawyers = await Lawyer.find(cond);
    // console.log(lawyers);

    if (!lawyers) {
        return Respond.notFound("no data found", false, res);
    }

    return Respond.success("Lawyer found", lawyers, res);

    // dbo.collection("customers").find({}).toArray(function (err, result) {
    // if (err) throw err;
    // console.log(result);

};
exports.login = async (req, res) => {
    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }
    if (!Lawyer) {
        return Respond.unauthorized('Invalid login details', false, res);
    }
    let lawyer = await Lawyer.findOne({
        user_type: req.body.user_type,
        email: req.body.email,
        password: hash(cypherdata)
    });
    if (!lawyer) {
        return Respond.unauthorized('Invalid login details', false, res);
    }
    return Respond.success('lawyer loggedin successfully', lawyer.details, res);
    if (user_type !== admin) {
        return Respond.unauthorized('You are not admin', false, res);
    }
    return Respond.success('logged in', admin.details, res);
};
exports.forgetpwd = async (req, res) => {

    let lawyer = await Lawyer.findOne({
        email: req.body.email
    });
    if (!lawyer) {
        return Respond.badRequest("Invalid Email Id", false, res);
    }
    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }
    lawyer = await Lawyer.findByIdAndUpdate(lawyer._id, { $set: { password: hash(cypherdata) } }, (err, result) => {
        if (!!err) {
            return Respond.exception('Something want wrong :', err, res);
        }
        return Respond.success("Password updated", result.details, res);
    });
};
exports.delete = async (req, res) => {
    let cond = {}
    if (!req.params.id) {
        return Respond.badRequest("Missing Lawyer id", [], res);
    }

    let lawyer = await Lawyer.findById(req.params.id);
}
exports.getlawyer = async (req, res) => {

    let cond = {};
    if (!!req.query.name) {
        cond['name'] = req.query.name;
    }

    
    
    let lawyers = await Lawyer.find(cond);
    console.log(lawyers);

    if (!lawyers) {
        return Respond.notFound("no data found", false, res);
    }

    return Respond.success("Lawyer found", lawyers, res);
};
exports.getlawyerdetail = async (req, res) => {

    let cond = {};
    if (!!req.query.city) {
        cond['city'] = req.query.city;
    }

    let lawyers = await Lawyer.find(cond);
    console.log(lawyers);

    if (!lawyers) {
        return Respond.notFound("no data found", false, res);
    }

    return Respond.success("Lawyer found", lawyers, res);
};

exports.search = async (req, res) => {

    if (err) throw err;
    var dbo = db.db("lawyer_db2")


    let lawyers = await Lawyer.findOne();
    console.log(lawyers);

    if (!lawyers) {
        return Respond.notFound("no data found", false, res);
    }

    return Respond.success("Lawyer found", lawyers, res);
}

exports.activedeactive = async (req, res) => {
    let cond = {}

    if (!req.params.id) {
        return Respond.badRequest("Missing Lawyer id", [], res);
    }

    let lawyer = await Lawyer.findById(req.params.id);
    if (!lawyer) {
        return Respond.notFound("Lawyer not found or invalid id", [], res);
    }

    console.log('lawyer.is_active:',lawyer.is_active);
    lawyer = await Lawyer.findByIdAndUpdate(lawyer._id, {$set:{is_active:lawyer.is_active === true?false:true},}, (err, result) => {
        if (!!err) {
            return Respond.exception('Something want wrong :', err, res);
        }
        console.log('result.is_active:',result.is_active);
        return Respond.success("Status updated", result.details, res);
    });    
}

 // dbo.collection("customers").find({}).toArray(function (err, result) {
         // if (err) throw err;
      // console.log(result);



/*exports.getlawyer = async (req,res) => {

    var query = {name: /^s/};

    let cond = {};
    if(!!req.query.city){
        cond['city'] = req.query.city;
    }

    let lawyers = await Lawyer.find(cond);
    console.log(lawyers);

    if (!lawyers) {
        return Respond.notFound("no data found", false, res);
    }

    return Respond.success("Lawyer found", lawyers, res);
};*/