body{
  margin: 0;
  padding: 0;
}
.slidershow{
  width: 100%;
  height: autox;
  overflow: hidden;
}
.middle{
  top: 50%;
  left: 50%;
  transform: translate(0,0);
}
.navigation{
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}
.bar{
  width: 35px;
  height: 7px;
  border: 1.5px solid #fff;
  margin: 6px;
  cursor: pointer;
  transition: 0.4s;
}
.bar:hover{
  background: #0808ff;
}

input[name="r"]{
    position: absolute;
    visibility: hidden;
}

.slides{
  width: 500%;
  height: 100%;
  display: flex;
}

.slide{
  width: 20%;
  transition: 0.6s;
}
.slide img{
  width: 100%;
  height: 100%;
}

#r1:checked ~ .s1{
  margin-left: 0;
}
#r2:checked ~ .s1{
  margin-left: -20%;
}
#r3:checked ~ .s1{
  margin-left: -40%;
}
#r4:checked ~ .s1{
  margin-left: -60%;
}
#r5:checked ~ .s1{
  margin-left: -80%;
}



    .clickme{
    padding: 12px 20px 12px 20px;
    color: white;
    width: 50%;
    cursor: pointer;
    font-size: 15px;
    background:#0080FF;
    border: none;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    border-radius: 2px;
    letter-spacing:1px;
    margin: 10px;
  }
  .clickme:hover{
    background: #00008B;
    transition: 0.3s;
  }
