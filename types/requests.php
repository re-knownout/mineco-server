<?php

namespace Types;

/**
 * Common server POST requests list
 */
class Requests {
    public const recaptchaToken = "recaptchaToken";
    public const accountLogin = "accountLogin";
    public const accountHash = "accountHash";
    public const uploadFile = "uploadFile";
    public const getFilePreview = "getFilePreview";
    public const deleteFile = "deleteFile";
    public const getMaterial = "getMaterial";
    public const deleteMaterial = "deleteMaterial";
    public const updateMaterial = "material:updateIdentifier";
    public const updateMaterialContent = "material:updateContent";
    public const updateMaterialText = "material:updateText";
    public const excludeEmpty = "material:excludeEmpty";
}

/**
 * POST requests for sending mails through web forms
 */
class FormRequests {
    public const sendTo = "form:sendTo";
    public const attachments = "form:attachments";

    public const text = "form:text";
    public const subject = "form:subject";

    public const name = "form:name";
    public const address = "form:address";

    public const phone = "form:phone";
    public const email = "form:email";

    public const target = "form:target";
}

/**
 * POST requests for searching materials in the database
 * with /app/materials/search endpoint
 */
class MaterialSearchRequests {
    public const title = ["title like", "%find:materialTitle%"];
    public const description = [ "description like", "%find:materialDescription%" ];

    public const content = "find:materialContent";
    public const tags = "find:materialTags";
    public const excludeTags = "find:materialExcludeTags";

    public const datetimeFrom = [ "datetime >=", "find:materialDatetimeFrom" ];
    public const datetimeTo = ["datetime <=", "find:materialDatetimeTo"];
    public const identifier = ["identifier =", "find:materialIdentifier"];
    public const pinned = ["pinned =", "find:materialPinned"];

    public const excludeEmpty = "excludeEmpty";
}

/**
 * POST requests for searching files in the database
 * with /app/files/search endpoint
 */
class FileSearchRequests {
    public const fileName = ["filename like", "%find:fileName%"];

    public const datetimeFrom = [ "datetime >=", "find:fileDatetimeFrom" ];
    public const datetimeTo = ["datetime <=", "find:fileDatetimeTo"];
    public const identifier = ["identifier =", "find:fileIdentifier"];

    public const extension = ["extension like", "%find:fileExtension%"];
}

class VariableRequests {
    public const update = "variable:updateVariable";
    public const rawName = "variable:variableName";
    public const name = ["name like", "%variable:variableName%"];
}

/**
 * Common server search POST requests for all search endpoints
 */
class CommonSearchRequests {
    public const limit = "find:limit";
    public const offset = "find:offset";
}