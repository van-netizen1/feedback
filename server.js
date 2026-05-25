const express = require('express');

const path = require('path');

const app = express();

app.use(express.json());

/* Static Files */
app.use(express.static(__dirname));

/* Homepage */
app.get('/', (req, res) => {

    res.sendFile(path.join(__dirname, 'haba.html'));

});

/* API */
app.post('/users', (req, res) => {

    console.log(req.body);

    res.json({
        success:true,
        received:req.body
    });

});

/* Render Port */
const PORT = process.env.PORT || 3000;

app.listen(PORT, () => {

    console.log(`Server running on port ${PORT}`);

});