O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:74:"C:\Users\osman\pcplus\vendor\symfony\stimulus-bundle\assets\dist\loader.js";s:10:"publicPath";s:75:"/assets/@symfony/stimulus-bundle/loader-e1ee9ace0562f2e6a52301e4ccc8627d.js";s:23:"publicPathWithoutDigest";s:42:"/assets/@symfony/stimulus-bundle/loader.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:3302:"import { Application } from '@hotwired/stimulus';
import { isApplicationDebug, eagerControllers, lazyControllers } from './controllers.js';

const controllerAttribute = 'data-controller';
const loadControllers = (application, eagerControllers, lazyControllers) => {
    for (const name in eagerControllers) {
        registerController(name, eagerControllers[name], application);
    }
    const lazyControllerHandler = new StimulusLazyControllerHandler(application, lazyControllers);
    lazyControllerHandler.start();
};
const startStimulusApp = () => {
    const application = Application.start();
    application.debug = isApplicationDebug;
    loadControllers(application, eagerControllers, lazyControllers);
    return application;
};
class StimulusLazyControllerHandler {
    constructor(application, lazyControllers) {
        this.application = application;
        this.lazyControllers = lazyControllers;
    }
    start() {
        this.lazyLoadExistingControllers(document.documentElement);
        this.lazyLoadNewControllers(document.documentElement);
    }
    lazyLoadExistingControllers(element) {
        this.queryControllerNamesWithin(element).forEach((controllerName) => this.loadLazyController(controllerName));
    }
    async loadLazyController(name) {
        if (canRegisterController(name, this.application)) {
            if (this.lazyControllers[name] === undefined) {
                return;
            }
            const controllerModule = await this.lazyControllers[name]();
            registerController(name, controllerModule.default, this.application);
        }
    }
    lazyLoadNewControllers(element) {
        new MutationObserver((mutationsList) => {
            for (const { attributeName, target, type } of mutationsList) {
                switch (type) {
                    case 'attributes': {
                        if (attributeName === controllerAttribute &&
                            target.getAttribute(controllerAttribute)) {
                            extractControllerNamesFrom(target).forEach((controllerName) => this.loadLazyController(controllerName));
                        }
                        break;
                    }
                    case 'childList': {
                        this.lazyLoadExistingControllers(target);
                    }
                }
            }
        }).observe(element, {
            attributeFilter: [controllerAttribute],
            subtree: true,
            childList: true,
        });
    }
    queryControllerNamesWithin(element) {
        return Array.from(element.querySelectorAll(`[${controllerAttribute}]`))
            .map(extractControllerNamesFrom)
            .flat();
    }
}
function registerController(name, controller, application) {
    if (canRegisterController(name, application)) {
        application.register(name, controller);
    }
}
function extractControllerNamesFrom(element) {
    const controllerNameValue = element.getAttribute(controllerAttribute);
    if (!controllerNameValue) {
        return [];
    }
    return controllerNameValue.split(/\s+/).filter((content) => content.length);
}
function canRegisterController(name, application) {
    return !application.router.modulesByIdentifier.has(name);
}

export { loadControllers, startStimulusApp };
";s:6:"digest";s:32:"e1ee9ace0562f2e6a52301e4ccc8627d";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:45:"Symfony\Component\AssetMapper\AssetDependency":3:{s:5:"asset";O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:79:"C:\Users\osman\pcplus\vendor\symfony\stimulus-bundle\assets\dist\controllers.js";s:10:"publicPath";s:80:"/assets/@symfony/stimulus-bundle/controllers-9ecc391c3a41226613a9c690f864b6b8.js";s:23:"publicPathWithoutDigest";s:47:"/assets/@symfony/stimulus-bundle/controllers.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:197:"import controller_0 from "../../controllers/hello_controller.js";
export const eagerControllers = {"hello": controller_0};
export const lazyControllers = {};
export const isApplicationDebug = true;";s:6:"digest";s:32:"9ecc391c3a41226613a9c690f864b6b8";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:2:{i:0;O:45:"Symfony\Component\AssetMapper\AssetDependency":3:{s:5:"asset";O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:60:"C:\Users\osman\pcplus\assets\controllers\hello_controller.js";s:10:"publicPath";s:72:"/assets/controllers/hello_controller-55882fcad241d2bea50276ea485583bc.js";s:23:"publicPathWithoutDigest";s:39:"/assets/controllers/hello_controller.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:500:"import { Controller } from '@hotwired/stimulus';

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Controller {
    connect() {
        this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
}
";s:6:"digest";s:32:"55882fcad241d2bea50276ea485583bc";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:31:"controllers/hello_controller.js";}s:6:"isLazy";b:0;s:19:"isContentDependency";b:1;}i:1;O:45:"Symfony\Component\AssetMapper\AssetDependency":3:{s:5:"asset";O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:60:"C:\Users\osman\pcplus\assets\controllers\hello_controller.js";s:10:"publicPath";s:72:"/assets/controllers/hello_controller-55882fcad241d2bea50276ea485583bc.js";s:23:"publicPathWithoutDigest";s:39:"/assets/controllers/hello_controller.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:500:"import { Controller } from '@hotwired/stimulus';

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Controller {
    connect() {
        this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
}
";s:6:"digest";s:32:"55882fcad241d2bea50276ea485583bc";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:31:"controllers/hello_controller.js";}s:6:"isLazy";b:0;s:19:"isContentDependency";b:0;}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:2:{i:0;s:45:"C:\Users\osman\pcplus/assets/controllers.json";i:1;s:40:"C:\Users\osman\pcplus/assets/controllers";}s:11:"logicalPath";s:39:"@symfony/stimulus-bundle/controllers.js";}s:6:"isLazy";b:0;s:19:"isContentDependency";b:0;}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:34:"@symfony/stimulus-bundle/loader.js";}