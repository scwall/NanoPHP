# NanoPHP

PHP libraries and tools for Nano currency

Examples at [NanoPHP/test](https://github.com/MikeRow/NanoPHP/tree/master/test)

---

## Install

<pre>
composer require mikerow/nanophp
</pre>

---

## Features

- [NanoBlock](https://github.com/MikeRow/NanoPHP/blob/master/src/NanoBlock.php)

  class for building Nano blocks

- [NanoCLI](https://github.com/MikeRow/NanoPHP/blob/master/src/NanoCLI.php)

  class for interfacing to Nano node CLI
  
- [NanoIPC](https://github.com/MikeRow/NanoPHP/blob/master/src/NanoIPC.php)

  class for interfacing to Nano node IPC

- [NanoRPC](https://github.com/MikeRow/NanoPHP/blob/master/src/NanoRPC.php)

  class for interfacing to Nano node RPC

- [NanoRPCExt](https://github.com/MikeRow/NanoPHP/blob/master/src/NanoRPCExt.php)

  additional functions for NanoRPC

- [NanoTool](https://github.com/MikeRow/NanoPHP/blob/master/src/NanoTool.php)

  class for node-independent Nano functions
  
- [NanoWS](https://github.com/MikeRow/NanoPHP/blob/master/src/NanoWS.php)

  class for interfacing to Nano node WebSocket

---

## FAQ

#### How to perform calculations with Nano denominations or raws?

<details><summary>PHP faces troubles when dealing with Nano amounts ...</summary>
<p>

- Data type `float` isn't precise at certain decimal depths
- Data type `integer` size is limited to 64 bit

A good solution is to perform calculations in raws using [GNU Multiple Precision](https://www.php.net/manual/en/book.gmp.php)

</p>
</details>

#### Why not use libsodium instead of Salt or php-blake2?

<details><summary>Some limitations prevent the use of libsodium ...</summary>
<p>

- Functions `sodium_crypto_sign_*` use SHA-2 instead Blake2
- Functions `sodium_crypto_generichash_*` don't allow output smaller than 16 bytes

</p>
</details>

---

## To do

- Add Epoch v2 support to NanoBlock
- Add FlatBuffers support to NanoWS
- Increase FlatBuffers performances
- Enable listening on IPC

---

## Credits

Thanks a lot for the work and effort of

- [strawbrary/php-blake2](https://github.com/strawbrary/php-blake2)
- [Textalk/websocket-php](https://github.com/Textalk/websocket-php)
- [google/flatbuffers](https://github.com/google/flatbuffers)
- [Bit-Wasp/bitcoin-lib-php](https://github.com/Bit-Wasp/bitcoin-lib-php)
- [aceat64/EasyBitcoin-PHP](https://github.com/aceat64/EasyBitcoin-PHP)
- [jaimehgb/RaiBlocksPHP](https://github.com/jaimehgb/RaiBlocksPHP)
- [Sergey Kroshnin](https://github.com/SergiySW)
