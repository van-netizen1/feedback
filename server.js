const express = require('express');
const path = require('path');

const app = express();

app.use(express.json());

/* Serve HTML/CSS/JS */
app.use(express.static(__dirname));

/* Home Route */
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'haba.html'));
});

/* API Route */
app.post('/users', (req, res) => {

    const data = req.body;

    console.log(data);

    res.json({
        success: true,
        received: data
    });
});

/* Start Server */
app.listen(3000, () => {
    console.log('Server running on port 3000');
});