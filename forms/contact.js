const { Resend } = require('resend');

const resend = new Resend('re_PxE8v9RD_ChuFRpX81jyxH9rvfh1x1PmH');

// Obtén los datos del formulario (similares a $_POST en PHP)
const formData = {
  from: 'email',
  email: 'manuelhola9@gmail.com',
  name: 'name',
  subject: 'subject',
  message: 'message',
};

(async function () {
  const { data, error } = await resend.emails.send({
    from: formData.from,
    to: formData.email,
    subject: formData.subject,
    html: `<p>${formData.message}</p>`,
  });

  if (error) {
    return console.error({ error });
  }

  console.log({ data });
})();
