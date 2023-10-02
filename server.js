const express = require('express');
const fs = require('fs');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

app.use(bodyParser.json());

// Serve the HTML file
app.get('/', (req, res) => {
    res.sendFile(__dirname + '/index.html');
});

// Save data to a text file
app.post('/save', (req, res) => {
    const data = req.body.data;

    if (!data) {
        return res.status(400).send('No data provided');
    }

    fs.appendFile('data.txt', data + '\n', (err) => {
        if (err) {
            console.error('Error:', err);
            return res.status(500).send('Error saving data');
        }

        console.log('Data saved:', data);
        res.status(200).send('Data saved successfully');
    });
});

app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
