const LanguageTranslatorV3 = require("ibm-watson/language-translator/v3");
const { IamAuthenticator } = require("ibm-watson/auth");

require("dotenv").config();

const languageTranslator = new LanguageTranslatorV3({
  version: "2018-05-01",
  authenticator: new IamAuthenticator({
    apikey: process.env.TRANSLATE_SERVICE_IAM_APIKEY,
  }),
  url: process.env.TRANSLATE_SERVICE_URL,
});

module.exports = {
  async translate(text = "") {
    return new Promise((resolve, reject) => {
      languageTranslator
        .translate({
          text: text,
          source: "en",
          target: "pt-br",
        })
        .then(({ result }) => {
          const [{ translation }] = result.translations;
          resolve(translation);
        });
    });
  },
};
