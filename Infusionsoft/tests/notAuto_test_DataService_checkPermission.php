
<form>
            userId: <input type="text" name="userId" value="<?php if(isset($_REQUEST['userId'])) echo htmlspecialchars($_REQUEST['userId']); ?>"><br/>
            module: <input type="text" name="module" value="<?php if(isset($_REQUEST['module'])) echo htmlspecialchars($_REQUEST['module']); ?>"><br/>
            setting: <input type="text" name="setting" value="<?php if(isset($_REQUEST['setting'])) echo htmlspecialchars($_REQUEST['setting']); ?>"><br/>
    <input type="submit">
<input type="hidden" name="go">
</form>
<?php
include('../infusionsoft.php');
include('testUtils.php');

if(isset($_REQUEST['go'])){
	$out = Infusionsoft_DataService::checkPermission($_REQUEST['userId'], $_REQUEST['module'], $_REQUEST['setting']);
	var_dump($out);
}