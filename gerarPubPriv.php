<?php 
	
		$config = array(
			'digest_alg' => 'sha512', 
			'private_key_bytes' => 4096,
			'private_key_type' => OPENSSL_KEYTYPE_RSA,


		);

		// conexao com o banco
		$conn =new mysqli("localhost","root","","bd_login");


		//criando chave publica e privada
		$res = @openssl_pkey_new($config);

		//extraindo chave privada 
		openssl_pkey_export($res, $privKey);

		//extraindo chave publica
		$pubKey = openssl_pkey_get_details($res);
		$pubKey_ = $pubKey["key"];

		echo $pubKey_;

		$pubKeyEncode = base64_encode($pubKey_);
		$privKeyEncode = base64_encode($privKey);

		$sql = "update chaves set pubKey='$pubKeyEncode',privKey='$privKeyEncode' where id='1'";

		$conn->query($sql);
		$conn->close();

?>	