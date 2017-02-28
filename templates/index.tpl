{include file="haut.tpl"}
  <div class="row">
    <form method="post" action="message.php">
      <div class="col-sm-10">
        <div class="form-group">
          <!-- On affiche le message -->
          <textarea id="message" name="message" class="form-control" placeholder="Message">
          </textarea>
          <input type="hidden" name="id" value="<?php echo $id ?>"/>
        </div>
      </div>
      <div class="col-sm-2">
        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
      </div>
    </form>
  </div>
  <blockquote>
    <?= $data['contenu'] ?>
    <div class="col-sm-2">
      <?php echo "<a href='index.php?id=" .$data['id']."&p=".$page."'><button type='button' class='btn btn-warning'>Modifier</button></a>" ?>
    </div>
    <div class="col-sm-2">
      <?php echo "<a href='suppression.php?id=" .$data['id']."&p=".$page."'><button type='button' class='btn btn-danger'>Supprimer</button></a>" ?>
    </div>
    <div class="col-sm-12">
      <?= "Ajouté le ".$data['date'] ?>
    </div>
  </blockquote>
  <blockquote>
    <?= $data['contenu'] ?>
    <div class="col-sm-2">
      <?php echo "<a href='index.php?id=" .$data['id']. "'></a>" ?>
    </div>
    <div class="col-sm-2">
      <?php echo "<a href='suppression.php?id=" .$data['id']. "'></a>" ?>
    </div>
    <div class="col-sm-12">
      <?= "Ajouté le ".$data['date'] ?>
    </div>
  </blockquote>
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a <?php echo "href='index.php?p=$previous'" ?> aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li>
      <a <?php echo "href='index.php?p=$next'" ?> aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
{include file="bas.tpl"}
