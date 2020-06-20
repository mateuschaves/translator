const fs = require("fs");
const translatorService = require("./services/translator");

function App() {
  function readFile(fileName) {
    try {
      const file = fs.readFileSync(fileName, {
        encoding: "utf8",
      });
      return file;
    } catch (error) {
      throw new Error("file not found");
    }
  }

  async function init() {
    const file = readFile("alo.php");

    const fileLines = file.split(/\r\n|\r|\n/g);

    let stringsTranlated = [];

    for (const line of fileLines) {
      const start = line.indexOf("=> '") + 4;
      const end = line.lastIndexOf("'");

      const string = line.slice(start, end);

      if (line.includes("[") || line.includes("]")) {
        stringsTranlated.push(line);
        continue;
      }

      try {
        if (string.length) {
          const stringTranslated = await translatorService.translate(string);
          stringsTranlated.push(
            line.replace(`=> '${string}'`, `=> "${stringTranslated}"`)
          );
        } else {
        }
      } catch (error) {
        console.log("merda");
      }
    }

    fs.writeFileSync("teste.php", stringsTranlated.join("\n"));
  }

  init();
}

App();
