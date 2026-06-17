<h2 class="mb-4">Create System</h2>

<div class="card dashboard-card">

    <div class="card-body">

        <form>

            <div class="row">

                <div class="col-12 mb-3">

                    <label class="form-label">
                        System Name
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Enter system name"
                    >

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Department
                    </label>

                    <select class="form-select">

                        <option selected disabled>
                            Select Department
                        </option>

                        <option>
                            Registrar Department
                        </option>

                        <option>
                            Library Department
                        </option>

                        <option>
                            Human Resources
                        </option>

                        <option>
                            Quality Assurance
                        </option>

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Status
                    </label>

                    <select class="form-select">

                        <option selected>
                            Active
                        </option>

                        <option>
                            Inactive
                        </option>

                    </select>

                </div>

                <div class="col-12 mb-3">

                    <label class="form-label">
                        Description
                    </label>

                    <textarea
                        class="form-control"
                        rows="4"
                        placeholder="Enter system description"
                    ></textarea>

                </div>

                <div class="col-12 mb-4">

                    <label class="form-label">
                        Launch URL
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="https://system-url"
                    >

                </div>

            </div>

            <div class="d-flex gap-2">

                <button
                    type="button"
                    class="btn btn-primary"
                >
                    Save System
                </button>

                <a
                    href="/portal/public/systems"
                    class="btn btn-outline-secondary"
                >
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>