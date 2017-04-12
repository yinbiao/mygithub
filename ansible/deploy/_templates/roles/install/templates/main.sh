#!/bin/bash

cd {{ TMP }}
install_log="{{ TMP }}/install.log"
compile_log="{{ TMP }}/compile.log"
projectname="{{ project }}"
appfile="{{ sh_kafka[kafka_version] }}"
name=`tar -tf $appfile |head -n 1 |cut -d "/" -f1`

function log(){
    echo $1 >> $install_log
}

function checkinstall(){
    if [[ -d /usr/local/$name || -d /usr/local/$projectname ]]; then
        echo "$projectname or $name exist"
        exit 1
    fi
    log "checkinstall ok"
}

function cleanenv(){
    #清除已安装的环境
    [[ -d /usr/local/$name ]] && rm -rf /usr/local/$name
    [[ -d /usr/local/${projectname}_bak ]] && rm -rf /usr/local/${projectname}_bak
    [[ -L /usr/local/${projectname} ]] && rm -rf /usr/local/${projectname}
    [[ -d /usr/local/${projectname} ]] && mv /usr/local/${projectname} /usr/local/${projectname}_bak
    log "clean env ok!"
}

function appinstall(){
    cleanenv
    tar -zxf {{ TMP }}/$appfile -C /usr/local/
    ln -s /usr/local/$name /usr/local/$projectname
    log "install ok!"
}

main(){
    > $install_log
    if [[ $1 == "checkinstall" ]]; then
        checkinstall
    fi
    if [[ $1 == "install" ]]; then
        appinstall
    fi
}

main $@