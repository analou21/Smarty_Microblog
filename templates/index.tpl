<!-- On inclut le header de la page -->
{include file="haut.tpl"}

<!-- Si l'utilisateur est connecté, il peut écrire un message et l'envoyer -->
{if $connexion == "co"}
  <div class="row">
    <form method="post" action="message.php">
      <div class="col-sm-10">
        <div class="form-group">
          <!-- On affiche le message -->
          <textarea id="message" name="message" class="form-control" placeholder="Message">
          </textarea>
          <!-- On affiche le message de l'utilisateur -->
          {$message}
          <input type="hidden" name="id" value="<?php echo $id ?>"/>
        </div>
      </div>
      <div class="col-sm-2">
        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
      </div>
    </form>
  </div>
{/if}

<!-- On boucle sur la BDD pour ressotir les messages avec leurs contenus, leurs auteurs et leurs dates d'ajout -->
{foreach $tab as $sms}
  <blockquote>
    <li>
      {$sms.contenu}
      <br>
        Ecrit par : {$sms.pseudo}
      <br>
        Date d'ajout :  {$sms.date|date_format:"%D à %H h %M m %S s"}
      <br>
      <!-- Si l'utilisateur est connecté, il peut supprimer ou modifier un message -->
      {if $connexion == "co"}
        <div class="col-sm-2">
          <a href="index.php?id={$sms.message_id}"><button type='button' class='btn btn-warning'>Modifier</button></a>
        </div>
        <div class="col-sm-2">
          <a href="suppression.php?id={$sms.message_id}"><button type='button' class='btn btn-danger'>Supprimer</button></a>
        </div>
        <div class="col-sm-12">
        </div>
      {/if}
    </li>
  </blockquote>
{/foreach}

<ul class="pagination">
  <!-- on affiche les flèches vers la gauche !-->
  {if $nbmess>0}
    <li>
      <a class="page-link" href="index.php?p={$page-1}" aria-label="Previous"><<</a>
    </li>
    {for $i=1 to $nb_pages}
      <li>
        <a href="index.php?p={$i}">{$i}</a>
      </li>
    {/for}
    <!-- on affiche les flèches vers la droite !-->
    <li>
      <a class="page-link" href="index.php?p={$page+1}" aria-label="Next">>></a>
    </li>
  {/if}
</ul>

<!-- On inclut le footer de la page -->
{include file="bas.tpl"}
