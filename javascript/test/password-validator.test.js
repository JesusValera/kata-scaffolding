const { validate} = require("../src/password-validator");

describe("Password Validator", function () {

  it("is_true_when_true", function () {
    var result = validate();
    expect(result).toBe(true);
  });

});
