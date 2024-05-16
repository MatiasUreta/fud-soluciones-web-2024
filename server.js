const express = require('express');
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');

const app = express();
app.use(bodyParser.json());

app.post('/contact', async (req, res) => {
  let formDetails = req.body;

  let transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
      user: 'yourEmail@gmail.com',
      pass: 'yourPassword'
    }
  });

  let mailOptions = {
    from: 'yourEmail@gmail.com',
    to: 'fudsolucionesweb@gmail.com',
    subject: 'Nuevo mensaje de contacto',
    text: `
      Nombre: ${formDetails.firstName}
      Apellido: ${formDetails.lastName}
      Email: ${formDetails.email}
      Teléfono: ${formDetails.phone}
      Mensaje: ${formDetails.message}
    `
  };

  let info = await transporter.sendMail(mailOptions);

  if (info.messageId) {
    res.json({ code: 200 });
  } else {
    res.json({ code: 500 });
  }
});

app.listen(5000, () => {
  console.log('Server is running on port 5000');
});
