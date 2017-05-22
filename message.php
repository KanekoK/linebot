<?php

function message_making($text) {
  // 送られてきたメッセージの中身からレスポンスのタイプを選択
  switch ($text) {
      case preg_match('/こんにちは|こんにちわ|hello|Hello|HELLO/', $text):
          $messageData = [
              'type' => 'template',
              'altText' => '確認ダイアログ',
              'template' => [
                  'type' => 'confirm',
                  'text' => 'こんにちわ^^ 何かご用ですか？',
                  'actions' => [
                      [
                          'type' => 'message',
                          'label' => 'はい',
                          'text' => 'はい'
                      ],
                      [
                          'type' => 'message',
                          'label' => 'いいえ',
                          'text' => 'いいえ'
                      ],
                  ]
              ]
          ];
          break;




      case "はい":
          // テキストタイプ
          $messageData = [
              'type' => 'text',
              'text' => 'やっぱそうだよね～'
          ];
          break;

      case "近藤勇":
          // テキストタイプ
          $messageData = [
              'type' => 'text',
              'text' => 'はぁ？'
          ];
          break;

      case "ボタン":
          $messageData = [
              'type' => 'template',
              'altText' => 'ボタン',
              'template' => [
                  'type' => 'buttons',
                  'title' => 'タイトルです',
                  'text' => '選択してね',
                  'actions' => [
                      [
                          'type' => 'postback',
                          'label' => 'webhookにpost送信',
                          'data' => 'value'
                      ],
                      [
                          'type' => 'uri',
                          'label' => 'googleへ移動',
                          'uri' => 'https://google.com'
                      ]
                  ]
              ]
          ];
          break;

      case "カルーセル":
          // カルーセルタイプ
          $messageData = [
              'type' => 'template',
              'altText' => 'カルーセル',
              'template' => [
                  'type' => 'carousel',
                  'columns' => [
                      [
                          'title' => 'カルーセル1',
                          'text' => 'カルーセル1です',
                          'actions' => [
                              [
                                  'type' => 'postback',
                                  'label' => 'webhookにpost送信',
                                  'data' => 'value'
                              ],
                              [
                                  'type' => 'uri',
                                  'label' => '美容の口コミ広場を見る',
                                  'uri' => 'http://clinic.e-kuchikomi.info/'
                              ]
                          ]
                      ],
                      [
                          'title' => 'カルーセル2',
                          'text' => 'カルーセル2です',
                          'actions' => [
                              [
                                  'type' => 'postback',
                                  'label' => 'webhookにpost送信',
                                  'data' => 'value'
                              ],
                              [
                                  'type' => 'uri',
                                  'label' => '女美会を見る',
                                  'uri' => 'https://jobikai.com/'
                              ]
                          ]
                      ],
                  ]
              ]
          ];
          break;

      case "時間":
          // テキストタイプ
          $messageData = [
              'type' => 'text',
              'text' => date('Y/m/d H:i:s')
          ];
          break;

      default:
          // それ以外は送られてきたテキストをオウム返し
          $messageData = [
              'type' => 'text',
              'text' => $text
          ];
  }
  return $messageData;
}