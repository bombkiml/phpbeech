<!-- Styles -->
<style>
.full-height {
  height: 90vh;
}
.flex-center {
  align-items: center;
  display: flex;
  justify-content: center;
}
.position-ref {
  position: relative;
}
.title {
  font-size: 34px;
  padding: 20px;
}
</style>
<div class="flex-center position-ref full-height">
  <div class="text-center">
    <div class="title text-muted">
      <h4><?php echo $this->num1 . " + " . $this->num2 . " = " . $this->result; ?></h3>
    </div>
  </div>
</div>
