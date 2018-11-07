<?php

return [
    'alipay' => [
        'app_id'         => '2016092000558361',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuwpYZ+I3Aw263t+cQChTrzjdm84TQqY8BuV18+t49dlpLpw1+zWoRLVTDEtd4bquLVq3ahiW1UHLolHmtjkP+dSL1+s/JBnVU8zbeKZsNYUfwK6/53Jc2W8P2G0JhMCmJLWSNe5O9XkKRXCJhi+hcHTrF42e56x9MwFctBVF55WTtbmuLqiNVdze5uLSUIICuhU+/BZz1PwSwLbjk4RT9MJKVv/RVa1kErrlGbPZ0IU7NTMxdu7zDLTRaCXhKuKyeTsfXW+0qEDn9Y0kgmtc9q2Nayj25FZhiaVzZr4FOCpY14CnzKOykAaALqp3u+pCLAcOwomiEeHbV94oxSY/zQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEApmqItVbe0I5TGoqj6w8Ev84lahp7tuDYwfT15Jvwyh1+MoGcOiWn40AvUWQ3kJ8/O+qh9ftAkMh0GXI+wnWXKBDYePhR5mZssPVYxYkm4TkHndj/I4sG0fmIapJ8LqEMedHHwdIJzRX1joWO48zHn3ej/FVTwauRY+HhV4ygmF8aVx4cd1EO0dNO1i8coL7oE9uePJEUDvpQ0qm1H9C+MyANGl7TYQpql16VjRH5RfVgUQT4wL/oqgD36Iba/2aABt1Rv9n44KcRHmtyjJduC1d0fleVedYLHpdwHi6Wts+dM1/wxn8qo/R0pspW/4I5HpfDW45euGwMCIlRe/6gwwIDAQABAoIBAQCRXEsPgtLbfwYuD93Aa3ztgUaDGKDpjBspyCukxWWdVgeuXDI3RD8SrDTotk4mwEL+tiNEdnPeQ4nN1FHnj8k50QUVHWqEgwD7zUL+QJ+6aRMzGKE7zatma71xwYRBQqFgIxKGRU4UWtMD67t1VaEktN+DgJDJgXBcu6gWzhpVHIx9E7dt/ozdV+sm9a3WWrxEoHk2SpGDTAVitKE9VW0jf3hQjChQdVx9DmSOV8rGYT8qwzfLaO7SCXkiN0qUKSa7usK0YLOepqhWOa3EJvftqXoGM+gHA43CmfhosGWiOjgPeaOrSA+FlKKsAAy9IcT7MPeMEZ9jy7gmfDtbYuaZAoGBANL5nXaHvax9Vww7vCkjtTzjovZQrk4kCPD88LMXCc46oOlnLeVvkuJWqQUvvEGhvR+ksMMjLucADSwbqiJxdp/I9BbfkQW4v2Ymigs7xRDLEgaz1l00//PpZSBAwAn2p5zDRNB48e16oUf16ZaBXlVd0eB32bZzZodMUvheyOqXAoGBAMnufjVr5KL5LUu1eDqf3h87GArVlb08+ZdB9WXuHK1TIMkR+SMoSCETxmlljqr2a2oWn1GaXHkKLNg/SjyepUiJ21+vQIdv5OHAOe5zmOTm7p/I93n8Qeuxya9TcKQpykj5qEMWKH6TN4J2DxL6Y11kSslaqi6LUQh1DVFyQdy1AoGBANGmFRClYRmYUDkq3xcukbpZJyaIFD44Vt5LLFF7MlZKMn7d9mDJ1/etUDaEMhoyREK+oJy5SLFqfqx3LUEe6VdtFQnpzi4WYbR71a/GDFVcxqP8b6edtD9IjiJX1b3Q6sy/ypEzro1j0AM3XpEeK4S/P4FE+AbzdE48zTJc1mEvAoGAB8etiydeBr1s9lbGjBOuvitLsNcrzr+zqhU7fDLhXfgu8jBEFguuQ7/8TAFCrumRl+PJPZ6h43P16Fr/5DgEjDfrgNNCvDUeb2g1ky9W+7K+DN/0UPncHFWcPKoNU/XcOlWMGxGWe9H2OIuN5yBIhcegbgOVPPfXJmlEGxg422UCgYBPBIQyWa44a1w+wQ/bDocwYmzdCADHtz9TCyxC+2dSzpF0Aw7SqjwCQ9ak4ODE8esm05r0qBlW3Cie7CnWPi+0VD69rxGxP7ttHaTl+Rqsf3QvK7a/32DtcrlzxCM1r+JEX1YtvZTfRAi1vCmyqeN8vv/oE63gtkvUXArEXdGyUg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
