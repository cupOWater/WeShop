const cookieStorage = {
    getItem: (key) => {
    const cookies = document.cookie
        .split(';')
        .map(cookie => cookies.split('='))
        .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
        return cookies[key];
    },
    setItem: (key, value) => {
        document.cookie = `${key}=${value}`;
    },
};
    // 
const storageType = cookieStorage;
const consentPropertyName = 'jdc_consent';
    //
const shouldDisplayCookie = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);
    //
window.onload = () => {
    if (shouldDisplayCookie()) {
        const consent = confirm('Our website uses cookies to run our functions and optimize your experience. By continuing, you agree to our Terms and Policy.');
        if (consent) {
            saveToStorage;
        }
    }
};