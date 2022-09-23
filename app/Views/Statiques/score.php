<style>
    .res-circle {
        /* (A) PERCENTAGE WIDTH & BORDER RADIUS */
        width: 10%;
        border-radius: 50%;

        /* (B) BACKGROUND COLOR */
        background: #f68919;

        /* (C) NECESSARY TO POSITION TEXT BLOCK */
        line-height: 0;
        position: relative;
    }

    /* (D) MATCH HEIGHT */
    .res-circle::after {
        content: "";
        display: block;
        padding-bottom: 100%;
    }

    /* (E) TEXT BLOCK */
    .circle-txt {
        /* (E1) CENTER TEXT IN CIRCLE */
        position: absolute;
        bottom: 50%;
        width: 100%;
        text-align: center;

        /* (E2) THE FONT - NOT REALLY IMPORTANT */
        font-family: arial, sans-serif;
        font-weight: bold;
    }
</style>
<div class="mt-5"></div>
<div class="display-1 text-white text-center ">Vous avez obtenu</div>
<div class="res-circle my-5 mx-auto border border-info border-5 opacity-75">
    <div class="circle-txt fs-1"><?= $score ?>/10</div>
</div>
<div class="text-center">
    <a href="/accueil">
        <button class="btn btn-dark btn-lg">
            <i class="bi-arrow-left"></i> Retour à l'accueil
        </button>
    </a>
</div>
<br>
<form action="/qcm/commentaire" method="post">
<div class="form-label text-center">
    <label class="fs-1 text-white">Laissez une note</label>
</div>
<div class="star-rating text-center mb-5 mt-3">
      <div class="star-rating__wrap">
        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
      </div>
    </div>
    <div class="text-center">
        <div class="form-group">
            <label for="bio" class="text-white fs-1 form-label">Laisser un commentaire</label>
            <textarea class="form-control w-50 fs-1 mx-auto text-bg-dark opacity-75" id="bio" rows="2" name="comment"></textarea>
        </div>
        <button class="btn btn-lg btn-dark mt-2" type="submit">Envoyer</button>
    </div>
</form>