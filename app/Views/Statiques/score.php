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
<div class="h-25"></div>
<div class="display-1 text-white text-center ">Vous avez obtenu</div>
<div class="res-circle my-5 mx-auto border border-info border-5 opacity-75">
  <div class="circle-txt fs-1"><?=$score?>/10</div>
</div>
<div class="text-center">
    <a href="/accueil">
        <button class="btn btn-dark btn-lg">
            <i class="bi-arrow-left"></i> Retour à l'accueil
        </button>
    </a>
</div>
<div class="h-25"></div>