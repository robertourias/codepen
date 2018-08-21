const rp = require('request-promise');
const TOKEN = "5ecd16dc68e2d7dbeef10385b931c4b1";
const NUMBER = "5511980927661";

(async() => {
    const result = await rp(`http://apilayer.net/api/validate?access_key=${TOKEN}&number=${NUMBER}`);
    console.log(result);
})();
