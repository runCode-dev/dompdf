<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>runCode</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .breakpage{
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div class="row-1 bg--dark">
        <p class="fl color-w fz-20">Fatura</p>
        <p class="fr color-w">{{date("d/m/Y")}}</p>
        <div class="clear"></div>
    </div>
    <div class="row-1">
        <img src="images/logo.png" width="200px" alt="">
        <table class="table-top">
            <tr>
                <td><b>Fatura de:</b></td>
                <td align="right"><b>Pagamento para:</b></td>
            </tr>
            <tr>
                <td>Gustavo Araujo</td>
                <td align="right">RunCode</td>
            </tr>
            <tr>
                <td>Rua abc número 15</td>
                <td align="right">Quadra 800 lote B</td>
            </tr>
            <tr>
                <td>gustavo@mail.com.br</td>
                <td align="right">contato@runcode.com.br</td>
            </tr>
        </table>

        <table class="table-invoice" cellpadding="0" cellpacing="0">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quant.</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1. Website Design</td>
                    <td>Six web page designs and three times revision</td>
                    <td>$350</td>
                    <td>1</td>
                    <td>$350</td>
                </tr>
                <tr>
                    <td>2. Web Development</td>
                    <td>Convert pixel-perfect frontend and make it dynamic</td>
                    <td>$600</td>
                    <td>1</td>
                    <td>$600</td>
                </tr>
                <tr>
                    <td>3. App Development</td>
                    <td>Android & Ios Application Development</td>
                    <td>$200</td>
                    <td>2</td>
                    <td>$400</td>
                </tr>
                <tr>
                    <td>4. Digital Marketing</td>
                    <td>Facebook, Youtube and Google Marketing</td>
                    <td>$100</td>
                    <td>3</td>
                    <td>$300</td>
                </tr>
            </tbody>
        </table>

        <table class="table-top">
            <tr>
                <td><b>Informações de pagamento:</b></td>
                <td align="right"><b>Subtotal</b> $1650</td>
            </tr>
            <tr>
                <td>Cartão - 123*************890</td>
                <td align="right">Taxa(5%) +$82</td>
            </tr>
            <tr>
                <td>Valor: $1732</td>
                <td align="right"><b>Valor total: $1732</b></td>
            </tr>
        </table>
        <div class="breakpage"></div>
        <div class="box">
            <p><b>OBSERVAÇÕES</b></p><br/>
            <ul style="margin-left: 30px;">
                <li>1 - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos deleniti adipisci distinctio possimus laborum dolorum delectus dolores. Numquam excepturi velit odit rem suscipit! Consequuntur, impedit dignissimos minus cumque quo quisquam.</li>    
                <li>2 - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos deleniti adipisci distinctio possimus laborum dolorum delectus dolores. Numquam excepturi velit odit rem suscipit! Consequuntur, impedit dignissimos minus cumque quo quisquam.</li>    
                <li>3 - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos deleniti adipisci distinctio possimus laborum dolorum delectus dolores. Numquam excepturi velit odit rem suscipit! Consequuntur, impedit dignissimos minus cumque quo quisquam.</li>    
            </ul>
        </div>
    </div>
</body>
</html>
