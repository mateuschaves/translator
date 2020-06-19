const fs = require("fs");

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

  function init() {
    const file = readFile("api.php");

    const fileLines = file.split(/\r\n|\r|\n/g);

    const fileLinesTranslated = fileLines.map((line, index) => {
      const start = line.indexOf("=> '") + 4;
      const end = line.lastIndexOf("'");

      const string = line.slice(start, end);

      return line.replace(`=> '${string}'`, `=> '${string} translated'`);
    });

    console.log(fileLinesTranslated);

    fs.writeFileSync("teste.php", fileLinesTranslated.join("\n"));
  }

  init();
}

App();
