<table style="font-family: Trebuchet MS, Arial, sans-serif; max-width: 600px; width: 100%; border: 1px solid #F9F9F9; border-collapse: collapse;" cellspacing="0" cellpadding="0" border="0" align="center">
    <tbody>
        <tr style="background-color: #fff;">
            <td style="padding: 15px;" width="120" valign="middle">
                <img src="https://i.imgur.com/S0AtSBP.png" alt="MdxFy Logo" style="max-width: 100%;">
            </td>
        </tr>

        <tr>
            <td colspan="2" style="padding: 20px; color: #333333; background-color: #F9F9F9;">
                <h2 style="margin-top: 0; color: #1D3055;">Bem-vindo(a) ao MdxFy, {{$user['name']}},</h2>
                <p style="margin: 10px 0; line-height: 1.6;">
                    Estamos empolgados em tê-lo(a) em nossa equipe! Para começar, precisamos que você configure a sua senha de acesso ao sistema.
                </p>
                <p style="margin: 10px 0; line-height: 1.6;">Clique no botão abaixo para cadastrar sua senha:</p>
                <div style="text-align: center; margin: 20px 0;">
                    <a href="{{$user['url']}}" style="background-color: #1D3055; color: #FFFFFF; text-decoration: none; padding: 10px 20px; border-radius: 4px; font-size: 16px;">
                        Cadastrar Senha
                    </a>
                </div>
                <p style="margin: 10px 0; line-height: 1.6; font-size: 14px; color: #666666;">
                    Este link expira em {{$user['expireInHours']}}. Caso tenha dúvidas, entre em contato com o RH ou a equipe de suporte.
                </p>
                <p style="margin: 10px 0;">Seja muito bem-vindo(a)!<br>Equipe MdxFy</p>
            </td>
        </tr>

        <tr>
            <td colspan="2" style="padding: 16px; color: #666666; font-size: 14px; line-height: 1.6; background-color: #F3F3F3; text-align: center;">
                Dúvidas? Acesse nossa
                <a href="https://mdxfy.com/help" style="color: #1D3055; text-decoration: underline;" target="_blank">
                    Central de Relacionamento
                </a>.
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding: 8px; text-align: center; font-size: 12px; color: #999999;">
                &copy; {{ date('Y') }} MdxFy. Todos os direitos reservados.
            </td>
        </tr>
    </tbody>
</table>