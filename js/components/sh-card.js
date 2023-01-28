export class ShCard extends MinzeElement {
  attrs = ['top-line', 'headline', 'value', 'href']

  html = () => `

    <a href="${this.href ?? 'index.php'}">
    <div class="top-line">${this.topLine ?? ''}</div>
    <div class="headline">${this.headline ?? ''}</div>
    </a>
    <slot>
      <div class="value">${this.value ?? ''}</div>
    </slot>
  `

  css = () => `
    :host {
      width: 200 px;
      height: 180px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      background: linear-gradient(220.64deg, #C8F5FF 0%, #B4B4FF 100%);
      font-family: sans-serif;
      border-radius: 2px;
      padding: 24px 24px 16px;
    }

    .top-line {
      font-size: 16px;
      margin-bottom: 2px;
    }

    .headline {
      font-size: 20px;
      font-weight: bold;
    }

    .value {
      font-size: 36px;
      font-weight: bold;
      margin-top: auto;
    }

    ::slotted(*) {
      margin-top: auto;
      margin-bottom: 12px;
    }
    a {
      color: #222;
      text-decoration: none;
    }
    
    a:hover {
      text-decoration: underline;
    }
  `
}
