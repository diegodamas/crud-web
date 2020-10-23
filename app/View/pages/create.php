<?= $render('header'); ?>

<form class="ml-3 mt-3">
  <div class="form-group">
    <label for="nomeCurso">Nome do curso</label>
    <input type="text" class="form-control" id="nomeCurso" placeholder="Nome do curso">
  </div>
  <div class="form-group">
    <label for="areaCurso">Área do curso</label>
    <input type="text" class="form-control" id="areaCurso" placeholder="Área do curso">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>


<?= $render('footer'); ?>