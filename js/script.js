$(document).ready(function () {
    $('#contactForm').submit(function (e) {
      e.preventDefault();
  
      // Form verilerini al
      var formData = $(this).serialize();
  
      // Form verilerini işleme için ajax isteği gönder
      $.ajax({
        type: 'POST',
        url: 'process.php',
        data: formData,
        success: function (data) {
          // İşlem başarılı ise burada bir şeyler yapabilirsiniz
          console.log('Form başarıyla gönderildi:', data);
        },
        error: function (error) {
          // İşlem sırasında hata oluştu ise burada bir şeyler yapabilirsiniz
          console.log('Hata:', error);
        }
      });
    });
  });
2  