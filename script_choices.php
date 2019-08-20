<script type="text/javascript">
  function Q7_Another() {
    var ck = document.getElementById('q7_7');
    if (ck.checked == true) {
      document.getElementById('another_Q7_7').style.display = "";
      document.getElementById('another_Q7_7').focus();
      document.getElementById('another_Q7_7').required = true;
    } else {
      document.getElementById('another_Q7_7').style.display = "none";
      document.getElementById('another_Q7_7').value = "";
      document.getElementById('another_Q7_7').required = false;
    }
  }
</script>