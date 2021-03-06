/**
    hasher.js
    @author Eshlee Romero | any.TV
*/

function getHash(getParam) {
    var hash = window.location.hash;
    hash = hash.replace('#', '');
    hash = hash.split('&');
    getParam = new RegExp(getParam, 'g');

    for (i = 0; i < hash.length; i++) {
        if (hash[i].match(getParam)) {
            var result = hash[i].split('=');

            if (result[1]) {
                return result[1];
            }
        }
    }

    return null;
}

function setHash(str) {
    if (arguments[1]) {
        var oldHash = window.location.hash.replace('#', ''),
            key = [];

        if (oldHash !== '') {
            key = str.split('='),
            arrHash = oldHash.split('&'),
            srch = new RegExp(key[0], 'g');

            for (i in arrHash) {

                if (arrHash[i].match(srch) !== null) {

                    if (i == 0) { // == works. i don't know why fvck
                        oldHash = oldHash.replace(arrHash[i], '');
                    }
                    else {
                        oldHash = oldHash.replace('&' + arrHash[i], '');
                    }
                }
            }

            if (oldHash !== '') {
                oldHash = oldHash + '&';
            }

            return window.location.hash = oldHash + str;
        }
    }

    return window.location.hash=str;
}

function removeHash(key) {
    var oldHash = window.location.hash.replace('#', ''),
        pattern = new RegExp(key + '(.+)(?=\&)', 'i');

    if (oldHash !== '') {
        oldHash = oldHash.replace(pattern, '');
        oldHash = oldHash.replace(/&+(?=\&)/i, '');
    }

    return window.location.hash = oldHash;
}
