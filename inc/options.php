<?php
$odin_theme_options = new Odin_Theme_Options( 
    'slug-da-pagina', // Slug/ID da página (Obrigatório)
    __( 'Opções do tema', 'odin' ), // Titulo da página (Obrigatório)
    'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
);

$odin_theme_options->set_tabs(
    array(
        array(
            'id' => 'odin_general', // ID da aba e nome da entrada no banco de dados.
            'title' => __( 'Configurações', 'odin' ), // Título da aba.
        )
    )
);

$odin_theme_options->set_fields(
    array(
        'general_section' => array(
            'tab'   => 'odin_general', // Sessão da aba odin_general
            'title' => __( 'Section Example', 'odin' ),
            'fields' => array(
                array(
                    'id' => 'field1',
                    'label' => __( 'Field 1', 'odin' ),
                    'type' => 'text',
                    'default' => 'Hello world',
                    'description' => __( 'Descrition Example', 'odin' )
                ),
                array(
                    'id' => 'field2',
                    'label' => __( 'Field 2', 'odin' ),
                    'type' => 'text'
                )
            )
        )
    )
);
