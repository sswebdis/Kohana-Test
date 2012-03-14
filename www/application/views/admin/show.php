<h3>Это админка</h3>
Директория  - <?php echo Request::current()->directory(); ?><br /><br />
Контроллер - <?php echo Request::current()->controller(); ?><br /><br />
Метод - <?php echo Request::current()->action(); ?>