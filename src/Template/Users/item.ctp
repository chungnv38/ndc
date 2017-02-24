<table class="table table-bordered table-form">
    <colgroup>
        <col class="col-sm-2">
        <col class="col-sm-4">
        <col class="col-sm-6">
    </colgroup>
    <tr>
        <th>Login name</th>
        <td>
            <input class="form-control input-sm" type="text" name="user_login_name" required pattern="[0-9a-z]+" 
                    value="<?php echo isset($user['user_login_name']) ? $user['user_login_name'] : '';?>" tabindex="1"/>
        </td>
        <td>Only contains number or alphabet</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>
            <input class="form-control input-sm" type="text" name="user_full_name" required 
                    value="<?php echo isset($user['user_full_name']) ? $user['user_full_name'] : '';?>" tabindex="2"/>
        </td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th>E-mail</th>
        <td>
            <input class="form-control input-sm" type="email" name="user_mail" required 
                    value="<?php echo isset($user['user_mail']) ? $user['user_mail'] : '';?>" tabindex="3"/>
        </td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th>Code</th>
        <td>
            <input class="form-control input-sm" type="text" name="user_password" required pattern=".{6,}" 
                    value="<?php echo isset($user['user_password']) ? $user['user_password'] : '';?>" tabindex="4"/>
        </td>
        <td>Greater than six characters</td>
    </tr>
    <tr>
        <th>Level</th>
        <td>
            <input class="form-control input-sm" maxlength="2" type="text" name="user_level" required pattern="[1-9]|10" 
            value="<?php echo isset($user['user_level']) ? $user['user_level'] : '';?>" tabindex="5"/>
        </td>
        <td>Beetween 1 and 10 (Must be >= 3 to get access to administration area)</td>
    </tr>
</table>
