var mongoose = require("mongoose");

var specilizationTypeSchema = mongoose.Schema({    
    tag : String,
    key : String
});

var Specilization = mongoose.model("SpecilizationType", specilizationTypeSchema,"specilization_types");
exports.Specilization = Specilization;