const { method } = require("../src/example");

describe("Kata name", function () {

  it("is_true_when_true", function () {
    const result = method();
    expect(result).toBe(true);
  });

});
