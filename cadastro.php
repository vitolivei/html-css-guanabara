<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .resultado {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .campo {
            margin: 15px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #007bff;
        }
        .label {
            font-weight: bold;
            color: #007bff;
        }
        .valor {
            color: #333;
            margin-top: 5px;
            word-break: break-word;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }
        a:hover {
            background-color: #0056b3;
        }
        .sem-dados {
            color: #dc3545;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <h1>Dados Recebidos</h1>
        
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
                foreach ($_POST as $chave => $valor) {
                    if (is_array($valor)) {
                        $valor = implode(', ', $valor);
                    }
                    echo '<div class="campo">';
                    echo '<span class="label">' . htmlspecialchars($chave) . ':</span>';
                    echo '<div class="valor">' . htmlspecialchars($valor) . '</div>';
                    echo '</div>';
                }
                
                // Exibir arquivo se foi enviado
                if (!empty($_FILES)) {
                    echo '<h2>Arquivos Enviados</h2>';
                    foreach ($_FILES as $chave => $arquivo) {
                        echo '<div class="campo">';
                        echo '<span class="label">' . htmlspecialchars($chave) . ':</span>';
                        echo '<div class="valor">';
                        echo 'Nome: ' . htmlspecialchars($arquivo['name']) . '<br>';
                        echo 'Tipo: ' . htmlspecialchars($arquivo['type']) . '<br>';
                        echo 'Tamanho: ' . htmlspecialchars($arquivo['size']) . ' bytes';
                        echo '</div>';
                        echo '</div>';
                    }
                }
            } else {
                echo '<div class="sem-dados">Nenhum dado foi recebido!</div>';
            }
        ?>
        
        <a href="javascript:history.back()">Voltar</a>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>