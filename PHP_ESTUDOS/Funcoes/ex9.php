<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados'=> array(
            //inicio: diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados' => array(
                    //inicio: gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //ter. gerente de vendas
                )
            ),
            //ter. diretor comercial
            //inicio: diretor financeiro
            array (
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //iniico: gerente de contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de contas a pagar',
                        'subordinados' => array(
                            //inicio: supervisor de pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de pagamentos'
                            )
                            //ter. Supervisor de pagamentos
                        )
                    )
                    //ter. Gerente de contas a pagar
                    //inicio:Gerente de compras
                    array (
                        'nome_cargo' => "gerente de compra",
                        'subordinados' => array(
                            //inicio supervidors de suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de suprimentos' 
                            )
                            //ter. supervisor de suprimentos
                        )
                    )
                    //ter. Gerente de compras
                )
            )
            //ter. Diretor financeiro
        )
        //ter. diretor comercial  
        
        ///novo
    )
)




?>