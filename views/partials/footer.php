<footer>
  <h3>FOOTER</h3>
</footer>

<script>
  const imglog = document.querySelector('.logoutbtnn');
  const imgnotif = document.querySelector('#notif');
  const logout = document.querySelector('.hrigth .logoutetautres');
  const notification = document.querySelector('.notifictioncontainer');
  const okfile = document.querySelector('#okfile');
  const camera = document.querySelector('.camera');
  const choosefilecontainer = document.querySelector('.choosefiilecontainer');

  imglog.addEventListener('click', ()=>{
   
   logout.classList.toggle('logactive');
  });
  imgnotif.addEventListener('click', ()=>{
    imgnotif.classList.toggle('active');
    notification.classList.toggle('active');
  });
  okfile.addEventListener('click', ()=>{
    choosefilecontainer.classList.remove('active');
  });
  camera.addEventListener('click', ()=>{
    choosefilecontainer.classList.add('active');
  });
</script>
</body>
</html>