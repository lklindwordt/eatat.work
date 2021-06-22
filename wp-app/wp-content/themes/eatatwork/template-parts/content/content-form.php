<?php
/**
 * Content form partial
 * 
 * @package Eatat.work
 */

?>

<form>
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
      <label for="exampleInputName1" class="form-label">Name:</label>
      <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
      <label for="exampleInputEmail1" class="form-label">Email:</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
      <label for="exampleInputPhone1" class="form-label">Telefon:</label>
      <input type="phone" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp">
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
      <label for="exampleInputName1" class="form-label">Personenzahl:</label>
      <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
      <label for="exampleInputEmail1" class="form-label">Datum der Veranstaltung:</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
      <label for="exampleInputPhone1" class="form-label">Firma:</label>
      <input type="phone" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp">
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPhone1" class="form-label">Nachricht:</label>
    <textarea id="exampleInputEmail1" class="form-control"></textarea>
  </div>

  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
      <label>Anlass:</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Firmenevent 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
          Private Veranstaltung
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
        <label class="form-check-label" for="flexRadioDefault3">
          Businesscatering 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
        <label class="form-check-label" for="flexRadioDefault4">
          Geburtstag
        </label>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
      <label>Equipment:</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
        <label class="form-check-label" for="flexCheckDefault1">
          Gläser & Geschirr
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
        <label class="form-check-label" for="flexCheckDefault2">
          Tische & Stühle
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
        <label class="form-check-label" for="flexCheckDefault3">
          Tischwäsche
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
        <label class="form-check-label" for="flexCheckDefault4">
          Zelt
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
        <label class="form-check-label" for="flexCheckDefault5">
          Dekoration
        </label>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
      <label>Personal:</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckPers1">
        <label class="form-check-label" for="flexCheckPers1">
          Servicemitarbeiter/in
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckPers2">
        <label class="form-check-label" for="flexCheckPers2">
          Koch/Köchin
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckPers3">
        <label class="form-check-label" for="flexCheckPers3">
          Barista
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckPers4">
        <label class="form-check-label" for="flexCheckPers4">
          Barkeeper/in
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckPers5">
        <label class="form-check-label" for="flexCheckPers5">
          Logistiker/in
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckPers6">
        <label class="form-check-label" for="flexCheckPers6">
          DJ
        </label>
      </div>
    </div>

  </div>

  <button type="submit" class="btn btn-primary">Anfrage senden</button>
</form>