<div class="alert alert-danger alert-dismissible fade show mt-5 col-lg-5 col-md-6 col-sm-6 col-xs-6 mx-auto" role="alert">
  <strong>Pseudo ou mot de passe invalide</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<script>
  var alertList = document.querySelectorAll('.alert');
  alertList.forEach(function (alert) {
    new bootstrap.Alert(alert)
  })
</script>
