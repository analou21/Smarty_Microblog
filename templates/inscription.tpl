{include file="haut.tpl"}

<form method="post" action="inscription.php" id="form_inscription">
  <div class="row">
    <div class="form-group col-sm-2">
      <label for="InputPseudo">Pseudo</label>
      <input type="pseudo" name="pseudo" class="form-control" id="InputPseudo" placeholder="Pseudo">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-sm-2">
      <label for="InputPseudo">Email</label>
      <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Email">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-sm-2">
      <label for="InputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
    </div>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
 </form>

{include file="bas.tpl"}
