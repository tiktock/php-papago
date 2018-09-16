# php-papago

php class for using [Papago](https://papago.naver.com)

## example

### simple

```php
<?php
require('Papago.php');
$papago=new Papago('en', 'ko');
echo $papago->translate('hi!');

/* output
안녕!
*/
```

### dictionary

```php
<?php
require('Papago.php');
$papago=new Papago(false, 'ko');     // Auto detect language
$papago->dict(3);
print_r($papago->translate('hi!'));

/* output
stdClass Object
(
    [srcLangType] => en
    [tarLangType] => ko
    [translatedText] => 안녕!
    [dict] => stdClass Object
        (
            [items] => Array
                (
                    [0] => stdClass Object
                        (
                            [entry] => <b>hi</b>
                            [subEntry] => 
                            [matchType] => exact:rmsymbol
                            [hanjaEntry] => 
                            [phoneticSigns] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [type] => 미국식
                                            [sign] => haɪ
                                        )

                                )

                            [pos] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [type] => 감탄사
                                            [meanings] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [meaning] => 안녕(하세요)
                                                            [examples] => Array
                                                                (
                                                                    [0] => stdClass Object
                                                                        (
                                                                            [text] => <b>Hi</b> guys!
                                                                            [translatedText] => 안녕, 친구들!
                                                                        )

                                                                )

                                                        )

                                                )

                                        )

                                )

                            [source] => 옥스포드
                            [url] => http://endic.naver.com/enkrEntry.nhn?entryId=b00744b981cf426f9da97fba68affb65
                            [mUrl] => http://m.endic.naver.com/enkrEntry.nhn?entryId=b00744b981cf426f9da97fba68affb65
                        )

                    [1] => stdClass Object
                        (
                            [entry] => <b>HI</b>
                            [subEntry] => 
                            [matchType] => exact:rmsymbol
                            [hanjaEntry] => 
                            [phoneticSigns] => 
                            [pos] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [type] => 
                                            [meanings] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [meaning] => Hawaii
                                                        )

                                                )

                                        )

                                )

                            [source] => 동아출판
                            [url] => http://endic.naver.com/enkrEntry.nhn?entryId=4671e0d22d03491d8269e941a9bfb913
                            [mUrl] => http://m.endic.naver.com/enkrEntry.nhn?entryId=4671e0d22d03491d8269e941a9bfb913
                        )

                    [2] => stdClass Object
                        (
                            [entry] => H.I.
                            [subEntry] => 
                            [matchType] => exact:rmsymbol
                            [hanjaEntry] => 
                            [phoneticSigns] => 
                            [pos] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [type] => 
                                            [meanings] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [meaning] => Hawaiian Islands; heat index; high intensity;  human interest; humidity index
                                                        )

                                                )

                                        )

                                )

                            [source] => 동아출판
                            [url] => http://endic.naver.com/enkrEntry.nhn?entryId=84b05fe49b2d4c76a3e954a4bd4d00d6
                            [mUrl] => http://m.endic.naver.com/enkrEntry.nhn?entryId=84b05fe49b2d4c76a3e954a4bd4d00d6
                        )

                )

        )

    [tarDict] => stdClass Object
        (
            [items] => Array
                (
                    [0] => stdClass Object
                        (
                            [entry] => <b>안녕</b>
                            [subEntry] => 
                            [matchType] => exact:rmsymbol
                            [hanjaEntry] => 安寧
                            [phoneticSigns] => 
                            [pos] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [type] => 
                                            [meanings] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [meaning] =>  peace, stability, well
                                                            [examples] => Array
                                                                (
                                                                    [0] => stdClass Object
                                                                        (
                                                                            [text] => 사회의 <b>안녕</b>을 유지하다 
                                                                            [translatedText] => maintain peace (in a society)
                                                                        )

                                                                )

                                                        )

                                                    [1] => stdClass Object
                                                        (
                                                            [meaning] => hello, hi, good-bye, bye
                                                            [examples] => Array
                                                                (
                                                                    [0] => stdClass Object
                                                                        (
                                                                            [text] => <b>안녕</b>, 나중에 보자 
                                                                            [translatedText] => See you later.
                                                                        )

                                                                )

                                                        )

                                                )

                                        )

                                )

                            [source] => 능률교육
                            [url] => http://endic.naver.com/krenEntry.nhn?entryId=f5ffa25e3bdb4d98859202f166a74187
                            [mUrl] => http://m.endic.naver.com/krenEntry.nhn?entryId=f5ffa25e3bdb4d98859202f166a74187
                        )

                    [1] => stdClass Object
                        (
                            [entry] => <b>안녕</b>, 친구.
                            [subEntry] => 
                            [matchType] => allterm:proximity:0.000000
                            [hanjaEntry] => 
                            [phoneticSigns] => 
                            [pos] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [type] => 
                                            [meanings] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [meaning] => Hey, buddy.
                                                        )

                                                )

                                        )

                                )

                            [source] => 능률교육
                            [url] => http://endic.naver.com/krenIdiom.nhn?idiomId=65cd9a37b3ab4c6eb548ba8e8d44398b
                            [mUrl] => http://m.endic.naver.com/krenIdiom.nhn?idiomId=65cd9a37b3ab4c6eb548ba8e8d44398b
                        )

                    [2] => stdClass Object
                        (
                            [entry] => <b>안녕</b>. 내일 봐요.
                            [subEntry] => 
                            [matchType] => allterm:proximity:0.000000
                            [hanjaEntry] => 
                            [phoneticSigns] => 
                            [pos] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [type] => 
                                            [meanings] => Array
                                                (
                                                    [0] => stdClass Object
                                                        (
                                                            [meaning] => Good bye. See you tomorrow.
                                                        )

                                                )

                                        )

                                )

                            [source] => 능률교육
                            [url] => http://endic.naver.com/krenIdiom.nhn?idiomId=206adf425f4d4e2ba3fba31def71e475
                            [mUrl] => http://m.endic.naver.com/krenIdiom.nhn?idiomId=206adf425f4d4e2ba3fba31def71e475
                        )

                )

            [examples] => Array
                (
                    [0] => stdClass Object
                        (
                            [text] => How are your folks back home?
                            [translatedText] => 고향의 부모님은 <b>안녕</b>하시지?
                        )

                    [1] => stdClass Object
                        (
                            [text] => Farewell! I hope we'll meet again soon.
                            [translatedText] => <b>안녕!</b> 곧 다시 만나자.
                        )

                    [2] => stdClass Object
                        (
                            [text] => “Hi Tipy! You look great.”
                            [translatedText] => “<b>안녕</b> 티피! 좋아보이는데!”
                        )

                    [3] => stdClass Object
                        (
                            [text] => Hello, I need to talk to someone about a billing problem.
                            [translatedText] => <b>안녕</b>하세요, 요금 청구 담당자와 통화하고 싶은데요.
                        )

                    [4] => stdClass Object
                        (
                            [text] => Hello, my name’s Doug Wilson from Empire Auto Parts.
                            [translatedText] => <b>안녕</b>하십니까, 저는 엠파이어 자동차 부품사의 더그 윌슨입니다.
                        )

                )

        )

    [delay] => 400
    [delaySmt] => 400
)
*/
```