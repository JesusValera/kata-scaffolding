import PasswordValidator from '../src/PasswordValidator'

describe('Password Validator', () => {
  it('is_true_when_true', () => {
    const passwordValidator = new PasswordValidator()

    expect(passwordValidator.validate()).toBe(true)
  })
})
