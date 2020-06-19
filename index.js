const fs = require("fs");

function App() {
  function readFile(fileName) {
    try {
      const filePath = path.join(__dirname, `./files/${fileName}`);
      const file = fs.readFileSync(filePath, {
        encoding,
      });
      return file;
    } catch (error) {
      throw new Error("file not found");
    }
  }

  function init() {
    readFile("api.php");
  }
}

App();
