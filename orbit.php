/* ---------- Container for the orbiting circles animation ---------- */
#circle-orbit-container {
  position: relative;
  top: 25px;
  left: 25px;
  height: 300px;
  width: 300px;
}

/* ---------- Inner orbit - This is the circles closest to the central point ---------- */
#inner-orbit {
  position: absolute;
  top: 75px;
  left: 75px;
  width: 150px;
  height: 150px;
  border: 2px #4A437F dashed;
  border-radius: 100%;
  -webkit-animation: spin-right 10s linear infinite;
  animation: spin-right 10s linear infinite;
}

/* ---------- Repeating styles for the inner orbiting circles ---------- */
.inner-orbit-cirlces {
  position: absolute;
  top: 62px;
  left: -6px;
  height: 10px;
  width: 10px;
  border-radius: 100%;
  background-color: #9F98E6;
}

/* ---------- Middle orbit - This is the circles second closest to the central point ---------- */
#middle-orbit {
  position: absolute;
  top: 35px;
  left: 35px;
  width: 225px;
  height: 225px;
  border: 2px #4A437F dashed;
  border-radius: 100%;
  -webkit-animation: spin-right 15s linear infinite;
  animation: spin-right 15s linear infinite;
}

/* ---------- Repeating styles for the inner orbiting circles ---------- */
.middle-orbit-cirlces {
  position: absolute;
  top: 25px;
  left: 17px;
  height: 20px;
  width: 20px;
  border-radius: 100%;
  background-color: #4A437F;
}

/* ---------- Outer orbit - This is the circles furthest away from the central point ---------- */
#outer-orbit {
  position: absolute;
  top: 0;
  left: 0;
  width: 294px;
  height: 294px;
  border: 2px #4A437F dashed;
  border-radius: 100%;
  -webkit-animation: spin-right 20s linear infinite;
  animation: spin-right 20s linear infinite;
}

/* ---------- Repeating styles for the outer orbiting circles ---------- */
.outer-orbit-cirlces {
  position: absolute;
  top: -17px;
  left: 125px;
  height: 30px;
  width: 30px;
  border-radius: 100%;
  background-color: #00FFCA;
}

/* ---------- Animation ---------- */
@-webkit-keyframes spin-right {
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

<div id="circle-orbit-container">

    <!-- Circles closest to the central point -->
    <div id="inner-orbit">
      <div class="inner-orbit-cirlces"></div>
    </div>
  
    <!-- Circles second closest to the central point -->
    <div id="middle-orbit">
      <div class="middle-orbit-cirlces"></div>
    </div>
  
    <!-- Circles furthest away to the central point -->
    <div id="outer-orbit">
      <div class="outer-orbit-cirlces"></div>
    </div>
  
  </div>