/**
 * @license
 * Copyright Google Inc. All Rights Reserved.
 *
 * Use of this source code is governed by an MIT-style license that can be
 * found in the LICENSE file at https://angular.io/license
 */

import {Injector} from '../di';
import {isBlank, isPresent} from '../facade/lang';
import {RenderDebugInfo} from '../render/api';

import {DebugAppView} from './view';
import {ViewType} from './view_type';


export class StaticNodeDebugInfo {
  constructor(
      public providerTokens: any[], public componentToken: any,
      public refTokens: {[key: string]: any}) {}
}

export class DebugContext implements RenderDebugInfo {
  constructor(
      private _view: DebugAppView<any>, private _nodeIndex: number, private _tplRow: number,
      private _tplCol: number) {}

  private get _staticNodeInfo(): StaticNodeDebugInfo {
    return isPresent(this._nodeIndex) ? this._view.staticNodeDebugInfos[this._nodeIndex] : null;
  }

  get context() { return this._view.context; }
  get component() {
    const staticNodeInfo = this._staticNodeInfo;
    if (isPresent(staticNodeInfo) && isPresent(staticNodeInfo.componentToken)) {
      return this.injector.get(staticNodeInfo.componentToken);
    }
    return null;
  }
  get componentRenderElement() {
    let componentView = this._view;
    while (isPresent(componentView.parentView) && componentView.type !== ViewType.COMPONENT) {
      componentView = <DebugAppView<any>>componentView.parentView;
    }
    return componentView.parentElement;
  }
  get injector(): Injector { return this._view.injector(this._nodeIndex); }
  get renderNode(): any {
    if (isPresent(this._nodeIndex) && this._view.allNodes) {
      return this._view.allNodes[this._nodeIndex];
    } else {
      return null;
    }
  }
  get providerTokens(): any[] {
    const staticNodeInfo = this._staticNodeInfo;
    return isPresent(staticNodeInfo) ? staticNodeInfo.providerTokens : null;
  }
  get source(): string {
    return `${this._view.componentType.templateUrl}:${this._tplRow}:${this._tplCol}`;
  }
  get references(): {[key: string]: any} {
    const varValues: {[key: string]: string} = {};
    const staticNodeInfo = this._staticNodeInfo;
    if (isPresent(staticNodeInfo)) {
      const refs = staticNodeInfo.refTokens;
      Object.keys(refs).forEach(refName => {
        const refToken = refs[refName];
        let varValue: any;
        if (isBlank(refToken)) {
          varValue = this._view.allNodes ? this._view.allNodes[this._nodeIndex] : null;
        } else {
          varValue = this._view.injectorGet(refToken, this._nodeIndex, null);
        }
        varValues[refName] = varValue;
      });
    }
    return varValues;
  }
}
