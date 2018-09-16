<?php
class Papago{
    private $json_head;
    private $data;
    private $curl;

    public function __construct($source = false, $target = false){
        $this->data = [
            'source' => $source,
            'target' => $target,
        ];

        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, 'https://papago.naver.com/apis/n2mt/translate');
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($this->curl, CURLOPT_POST, true);

        $this->dict();
    }

    public function setLang($source = false, $target = false){
        $this->data['source'] = $source ? $source : $this->data['source'];
        $this->data['target'] = $target ? $target : $this->data['target'];
        return !!$this->data['target'];
    }

    public function dect($text){
        $head=substr(base64_decode('rlWkqJIlrFV6VwOpbmhlbGxvIn0='), 0, 13);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, 'data='.base64_encode($head.$text.'"}'));
        curl_setopt($this->curl, CURLOPT_URL, 'https://papago.naver.com/apis/langs/dect');
        $ret=json_decode(curl_exec($this->curl))->langCode;
        curl_setopt($this->curl, CURLOPT_URL, 'https://papago.naver.com/apis/n2mt/translate');
        return $ret;
    }

    public function dict($dictDisplay=false){
        $this->json_head=base64_decode('rlWxnJA0Vwc0paIy');
        if(is_numeric($dictDisplay) && $dictDisplay>0){
            $this->data['dictDisplay']=$dictDisplay;
        }else{
            if(isset($this->data['dictDisplay']))
                unset($this->data['dictDisplay']);
            $this->json_head[2] = $this->json_head[2] ^ chr(1);
        }
    }
    
    public function translate($text, $source = false, $target = false){
        if (!$this->setLang($source, $target))
            return false;
        
        $opt=[];
        if(!$this->data['source'])
            $opt['source']=$this->dect($text);
        
        $this->data['text'] = $text;
        $data = json_encode(array_merge($this->data, $opt));
        $data[0] = ',';
        $data = base64_encode($this->json_head . $data);

        curl_setopt($this->curl, CURLOPT_POSTFIELDS, 'data=' . $data);
        $ret=json_decode(curl_exec($this->curl));

        return isset($this->data['dictDisplay'])?$ret:$ret->translatedText;
    }
}