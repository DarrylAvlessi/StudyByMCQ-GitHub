<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>L'administrateur a été ajouté avec succès!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<script>
  var alertList = document.querySelectorAll('.alert');
  alertList.forEach(function (alert) {
    new bootstrap.Alert(alert)
  })
</script>